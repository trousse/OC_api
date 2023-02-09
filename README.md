
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/8ea177d6a6184c53b3cc79e9db477a21)](https://www.codacy.com/gh/trousse/OC_api/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=trousse/OC_api&amp;utm_campaign=Badge_Grade)

# ⚙️ Installation
____________________
#### _Requirement 
(you can use this command "composer check" for verify):

php 7.4+
composer > 2.0.0

#### _For install dependencies :

<code> $ composer install </code>

#### _You need to create your .env.local with .env and modify with your parameters.

#### _To create a database and install migrations :

<code> $ php bin/console doctrine:database:create </code>
<code> $ php bin/console doctrine:migrations:migrate </code>.

#### _To generate SSL keys for JWT Token :

<code> $ mkdir config/jwt </code>
<code> $ php bin/console lexik:jwt:generate-keypair </code>

#### After that, you can use this command to run this Api :

$ symfony serve

##### You can access to Swagger Api from this link : http://localhost:8000/api.
