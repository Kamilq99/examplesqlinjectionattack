# Symulacja Hurtowni Danych

## Opis

Projekt symuluje prostą hurtownię danych, która przechowuje informacje o produktach w bazie danych MySQL. W ramach tego ćwiczenia zostanie skonfigurowany serwer Apache z PHP oraz baza danych MySQL, a następnie utworzona strona internetowa do wyświetlania danych produktów z bazy. Został on stworzony po to aby przedstawić jak działa atak SQLInjection.

## Wymagania

- System operacyjny oparty na Linuxie (np. Ubuntu)
- Zainstalowany serwer Apache
- Zainstalowany interpreter PHP
- Zainstalowana baza danych MySQL

## Instalacja

1. **Instalacja Apache, PHP i MySQL:**
   ```bash
   sudo apt update
   sudo apt install apache2 php libapache2-mod-php php-mysql mysql-server
