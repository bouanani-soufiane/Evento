# Création d'une plateforme de gestion et réservation des places d'événements avec Laravel

🧑‍💻 Ce projet vise à créer une plateforme de gestion et de réservation des places pour des événements en utilisant le framework Laravel.

## Installation

### 🔗 Cloner le dépôt en utilisant cette commande :

```bash
git clone https://github.com/bouanani-soufiane/Evento.git
```
### Exécuter le projet :

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
### Ajouter le fichier .env :

```bash
cp .env.example .env
```
### Générer la clé d'application :

```bash
./vendor/bin/sail artisan key:generate
```
### Exécuter les migrations :

```bash
./vendor/bin/sail artisan migrate
```
## Aperçu du diagramme de classe
![DiscoverWorld Preview](/public/uml/UML_class.png)
## Aperçu du diagramme de cas d'utilisation
![DiscoverWorld Preview](/public/uml/Use_Case.png)

