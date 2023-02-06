# Moxfield Collection Magic The Gathering CSV Generator
This PHP script takes a specifically formated TXT file and converts it into CSV, so that it can be imported into the Moxfield Collection feature.

## Important to know
This script assume that all your cards are in English and will format the CSV file accordingly.

## How the TXT file should be formatted
Example entry:

> 1 A Little Chat (snc) snc no 47

**1** = Count / amount / number of the card<br>
**A Little Chat** = Name of the card<br>
**(snc)** = Set code of card with brackets - [View full list](https://en.wikipedia.org/wiki/List_of_Magic:_The_Gathering_sets)<br>
**snc** = Set code of card without brackets - [View full list](https://en.wikipedia.org/wiki/List_of_Magic:_The_Gathering_sets)<br>
**no** = Specify if the card is foil or not (Options: no / foil)<br>
**47** = Collector number of the card

**_It is very important to keep it in the above order and also to have one entry per line._**

## How to use
Prerequisites:
- PHP 7.4 or greater

Execute script:
1. Download this repository as a ZIP file
2. Install a local server environment like [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/en/), or have access to an online hosting account.
3. Extract the ZIP file into a folder on your local server environment or your online host.
4. Inside of the folder you should have a TXT file called **_mtg-cards-list_**. You will need to edit this TXT file to include all the cards that you want to import into Moxfield's Collection section. (Please refer to the [How the TXT file should be formated](#how-the-txt-file-should-be-formated) section above.)
5. Type in the URL of the folder, using your browser of choice, and it should run the script.
6. Once the script has run, you should see a **Done** message appear in your browser.
7. Now go into the folder and you should see a file called **_import.csv_**. If don't, refresh the folder and it should appear.
8. Take this **_import.csv_** file and import it into the Moxfield Collection section using their Import feature.
