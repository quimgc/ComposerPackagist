# ComposerPackagist

El primer que he fet ha sigut crear un directori amb el nom de ComposerPackagist.

Amb l'ajuda de PHPStorm he creat un directori amb el nom de **src** i a dins d'aquest dir he creat una classe PHP anomenat **Hello.php**.

Codi class **Hello.php**:

    namespace Quimgc;
    
    use Faker\Factory;
    class Hello
    {
        public function hello() {
        $faker = Factory::create();
        echo 'Hola ' . $faker->name;
        }
    }

Un cop creada la classe, al directori **ComposerPackagist** s'ha d'executar:

    composer init

Quan pregunta **Search for a package:** s'ha de posar:
  
    fzaninotto/faker
    
Si pregunta per la versió clic **Enter**. 


Resultat fitxer **composer.json**:

    {
        "name": "quimgc/hello-ng",
        "require": {
            "fzaninotto/faker": "^1.7"
        },
        "authors": [
            {
                "name": "quimgc",
                "email": "quimgonzalez@iesebre.com"
            }
        ],
        "autoload": {
      "psr-4": {
          "Quimgc\\": "src/"
      }
    },
    }


A continuació s'ha d'executar **composer install**.

Al directori arrel del paquet, s'ha de crear un nou directori anomenat **tests** i a dins s'ha de crear un fitxer php anomenat **test_hello.php**.


Dins del fitxer **test_hello.php** s'ha d'afegir:

    require 'vendor/autoload.php';
    
    require 'src/Hello.php';
    
    $hello = new Hello();
    
    $hello->hello();
    
    
Un cop fet tots aquests passos, al directori **ComposerPackagist** s'ha d'executar:

    git tag -a 0.1.0

Això serveix per crear una versió.

**NOTA**: Per guardar **Ctrl KD**

Un cop fet això es fa:

    git push origin 0.1.0



## Packagist.org

Quan ja està el paquet pujat a **github**, s'ha d'anar a la web:

    https://packagist.org/packages/submit

I afegir el paquet amb la url:

    https://github.com/quimgc/ComposerPackagist

## Ajudes

http://blog.jgrossi.com/2013/creating-your-first-composer-packagist-package/
http://acacha.org/mediawiki/Composer#Packagist






 "autoload": {
      "files": "src/Hello.php"
    }

"psr-4": {
      "Quimgc\\": "src/"
    }


prova
