<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use App\Models\Sale;
use App\Models\Lease;
use Illuminate\Support\Facades\Storage;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;
use App\Jobs\AskToContinueJob;
class BotManController extends Controller
{
    public function handle(Request $request)
    {
        $botman = app('botman');
       // Timeout in seconds
        $botman->hears('hi', function (BotMan $bot) {
            $bot->typesAndWaits(1);
            $bot->reply('Hello! How can I assist you? (type "take tour" to get started)');
        });
        $botman->hears('Thank You', function (BotMan $bot) {
            $bot->reply('You\'re welcome! If you have any more questions or need assistance, feel free to ask. (type "take tour" to get started)');
            $bot->typesAndWaits(1); // Simulate typing for 1 second

            // Get all the messages exchanged during the conversation
            $messages = $bot->getMessages();

            // Serialize the messages into a string
            $transcript = '';
            foreach ($messages as $message) {
                $transcript .= $message->getText() . "\n";
            }

            // Save the transcript to a file
            $fileName = 'conversation_summary.txt';
            Storage::disk('public')->put($fileName, $transcript);

            // Get the URL of the file
            $fileUrl = Storage::url($fileName);

            // Format the URL as a clickable link
            $linkText = '<a href="' . $fileUrl . '">Download Conversation Transcript</a>';

            // Send the link as a response
            $bot->reply('Here is the conversation transcript:');
            $bot->reply($linkText);
        });
        $botman->hears('take tour', function (BotMan $bot) {
            $bot->typesAndWaits(1);
            $bot->reply('Sure! Let me guide you through our website. (type "sale" or "lease")');
            // Implement logic for guiding the user through the website
        });

        $botman->hears('sale', function (BotMan $bot) {
            $bot->typesAndWaits(1);
            // Logic to retrieve properties available for sale
            $sales = Sale::all();
            $index = 1;

            // Construct a message with links for each sale item
            $message = "This is the available listings for purchase:<br>";
            foreach ($sales as $sale) {
                // Assuming $sale->name contains the name of the item
                // Assuming $sale->id contains the ID of the item
                $message .= "$index. <a href='" . route('viewsale', ['id' => $sale->id]) . "'>" . $sale->name . "</a><br>";
                $index++;
            }

            // Output the constructed message
            $bot->reply($message);
        });


        $botman->hears('lease', function (BotMan $bot) {
            $bot->typesAndWaits(1);
            // Logic to retrieve properties available for sale
            $leases = Lease::all();
            $index = 1;

            // Construct a message with links for each sale item
            $message = "This is the available listings for lease:<br>";
            foreach ($leases as $lease) {
                // Assuming $sale->name contains the name of the item
                // Assuming $sale->id contains the ID of the item
                $message .= "$index. <a href='" . route('viewlease', ['id' => $lease->id]) . "'>" . $lease->name . "</a><br>";
                $index++;

            }

            // Output the constructed message
            $bot->reply($message);
        });
        $botman->fallback(function($bot) {
            $userMessage = $bot->getMessage()->getText();
            $usedWord = $this->getUsedWord($userMessage);
            if ($this->containsNegativeWords($userMessage)) {
                $bot->typesAndWaits(1);
                $bot->reply('I\'m sorry, did you mean "' . $usedWord . '"?  If there\'s anything specific that\'s bothering you or that you\'d like assistance with, please let me know. I\'m here to help!');
            } elseif ($this->containsPositiveWords($userMessage)) {
                $bot->typesAndWaits(1);
                $bot->reply('That\'s great to hear! If there\'s anything specific you want to talk about or need assistance with, feel free to let me know.');
            } else {
                $bot->typesAndWaits(1);
                $bot->reply('I\'m sorry, I didn\'t understand "' . $usedWord . '".');
            }
        });
        $botman->listen();




    }
    private function getUsedWord($message)
{
    $words = explode(' ', $message);
    // Return the first word used by the user
    return $words[0];
}
    private function containsNegativeWords($message)
    {
        $negativeWords = [
            'hate', 'bad','disrespect','tang ina mo','puta','panget', 'angry', 'frustrated', 'dislike', 'upset', 'fuck', 'sad', 'depressed', 'unhappy', 'miserable',
            'gloomy', 'sorrowful', 'despair', 'desperate', 'hopeless', 'dejected', 'grief', 'melancholy', 'regret',
            'disappointed', 'distressed', 'anguish', 'agony', 'resentful', 'annoyed', 'irritated', 'furious', 'enraged',
            'outraged', 'disgusted', 'repulsed', 'offended', 'insulted', 'humiliated', 'ashamed', 'guilty', 'embarrassed',
            'humiliated', 'ashamed', 'guilty', 'embarrassed', 'insecure', 'anxious', 'nervous', 'worried', 'fearful',
            'terrified', 'panicked', 'alarmed', 'scared', 'frightened', 'dismayed', 'shocked', 'traumatized', 'stressed'
        ];
        // Add more negative words as needed
        foreach ($negativeWords as $word) {
            if (stripos($message, $word) !== false) {
                return true;
            }
        }
        return false;
    }
    private function containsPositiveWords($message)
{
    $positiveWords = ['happy', 'joyful', 'excited', 'satisfied', 'love', 'fantastic', 'amazing', 'awesome', 'wonderful', 'excellent', 'great', 'superb', 'delighted', 'pleased', 'content', 'grateful', 'thrilled', 'ecstatic', 'overjoyed', 'blissful', 'admire', 'appreciate', 'commend', 'applaud', 'praise', 'stellar', 'fabulous', 'terrific', 'glad', 'eager', 'enthusiastic', 'radiant', 'smiling', 'vibrant', 'cheerful', 'upbeat', 'positive', 'inspired', 'motivated', 'energetic', 'dynamic', 'passionate', 'charming', 'kind', 'friendly', 'warm', 'welcoming'];
 // Add more positive words as needed
    foreach ($positiveWords as $word) {
        if (stripos($message, $word) !== false) {
            return true;
        }
    }
    return false;
}

}
