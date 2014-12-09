# LegacyGeneratorTemplatesBundle

This bundle is an extract of templates from GeneratorBundle before moving to the AdminLTE
layout. It provides most simple layout and so easily customizable.

That bundle is not officially maintained. All PR are welcome and would probably be accepted.

## Installation

First, you need to add this bundle to your composer file:

```
composer require symfony2admingenerator/legacy-generator-templates-bundle
```

## Configuration

Add the bundle to your `AppKernel` file:

```php
class AppKernel extends Kernel
{
	public function registerBundles()
    {
        $bundles = array(
        	// ...
        	new Admingenerator\LegacyGeneratorTemplatesBundle\AdmingeneratorLegacyGeneratorTemplatesBundle(),
        	// ...
        );
}
```

Finally, configure the Admingenerator to use the templates:

```yaml
# config.yml

admingenerator_generator:
    # ...
    templates_dirs:
    	# ... eventually your own templates
        - %kernel.root_dir%/../vendor/symfony2admingenerator/legacy-generator-templates-bundle/Resources/templates
```
