# LazyLoad Images - Plugin WordPress

## Description

LazyLoad Images est un plugin WordPress permettant d'améliorer la performance de votre site en appliquant le chargement différé (lazy loading) aux images. Cela permet de réduire le temps de chargement initial des pages et d'améliorer l'expérience utilisateur.

## Fonctionnalités

Remplace automatiquement l'attribut src des images par data-src.

Ajoute la classe lazyload aux images pour un chargement différé.

Charge un script JavaScript qui active le lazyload des images visibles à l'écran.

Compatible avec les articles, les images mises en avant et les widgets.

## Installation

Téléchargez le fichier ZIP du plugin.

Allez dans votre tableau de bord WordPress : Extensions > Ajouter.

Cliquez sur Téléverser une extension et importez le fichier ZIP.

Activez le plugin après l'installation.

### Installation avec Bedrock et Composer

Si vous utilisez Bedrock et gérez vos extensions avec Composer, vous pouvez installer le plugin en l'ajoutant à votre composer.json :
```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Guillaume-Souillard/nsn-wp-lazyload-plugin"
    }
  ],
  "require": {
    "Guillaume-Souillard/nsn-wp-lazyload-plugin": "^1.0"
  }
}
```
Ensuite, exécutez la commande suivante pour l'installer :
```
composer update
```
Une fois installé, assurez-vous qu'il est bien activé dans WordPress.

## Utilisation

Le plugin fonctionne automatiquement après son activation. Toutes les images de votre site seront optimisées sans aucune configuration requise.

## Fichiers principaux

lazyload-images.php : Fichier principal du plugin, applique le lazyload aux images.

js/lazyload.js : Script JavaScript qui charge les images lorsque l'utilisateur les fait défiler.
