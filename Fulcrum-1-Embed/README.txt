The main.php is php code you will upload on the server or embed in any php file on server, which is less than 160 bytes, which then requests the Unlock.txt from a pastebin link(you can upload the Unlock.txt to any pastebin and then change location in main.php)

The Unlock.txt then evaluates that if a POST[unlock] request is sent, and if positive, then requests decrypter.txt from another pastebin link, you can upload the decrypter.txt to pastebin and then change the location in Unlock.txt

The decrypter.txt(from pastebin) will then request the main shell source(encrypted), and then ir will try to decrypt it from the key recieved(you can just change the location in decrypter.txt to point to your encrypted webshell) or use the encrypted shells given by us

The main.php first requests the Unlock.txt(from pastebin), and if it gets a "unlock" POST request, it forwards it to the "decrypter.txt" where u have send key and iv also

in this format, You will need to send the request twice to use your shell(you can use unlocker.html to send requests)
http://site.com/shell.php
POST DATA:
unlock=yes&key=yourkey&iv=youriv
