![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![ngrok](    https://img.shields.io/badge/ngrok-140648?style=for-the-badge&logo=Ngrok&logoColor=white)
![html](    https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![css](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![apache](https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=Apache&logoColor=white)



# PCYB Aplikacja phishingowa / Phishing App for Cybersecurity class

## Technologie
Użyte technologie / Used technologies
 * XAMPP Apache HTTP Server
 * HTML & CSS
 * PHP
 * ngrok

## Co to jest? / What is it?
Jest to rozwiązanie phishingowe wykorzystujące formularz konkursowy umieszczony na serwerze Apache. Dane wpisane przez użytkownika zostają zapisane do pliku na tymże serwerze. Oczywiście formularz tak naprawdę nie zgłasza do loterii, jest to jedynie interfejs mający za zadanie wprowadzić użytkownika w błąd. Kliknięcie przycisku ”Zaloguj” przekierowuje do strony z komunikatem potwierdzenia wzięcia udziału w nieistniejącej loterii. Za pomocą fałszywej strony loterii, opracowano środowisko, w którym użytkownicy są zachęcani do udziału w
atrakcyjnej loterii, a jednocześnie ich poufne dane logowania są niezauważalnie przechwytywane. Wykorzystano
serwer Apache, skrypty HTML i PHP, oraz ngrok do tunelowania ruchu, co umożliwiło udostępnienie linku do
fałszywej strony potencjalnym ofiarom.

This project is a phishing tactic utilizing a fake lottery ticket that retrieves victim's login credentials (in this case email address and password) and saves it in a text file form on attacker's computer. The malware is placed on a localhost server and exposed to the Internet using a cross-platform application that creates secure tunnels to localhost machine. This way the malware can be shared via URL e.g. on social media.

<img src="zdj\xamp.png"/>
<img src="zdj\ngrok.png"/>
<img src="zdj\login.png"/>
<img src="zdj\done.png"/>
<img src="zdj\zapis.png"/>
