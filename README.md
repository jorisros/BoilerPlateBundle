# BoilerPlateBundle
This libary is an boilerplate for writing new bundles in Symfony.

## Usage
Run the following command to add the bundle to your project.
```
composer require jorisros/boilerplate-bundle
```
To see if the bundle is correctly installed run the following command.
```
php bin/console debug:container jorisros.service.example
```
The result should be look like:
```

Information for Service "jorisros.service.example"
==================================================

 ---------------- --------------------------------------------
  Option           Value
 ---------------- --------------------------------------------
  Service ID       jorisros.service.example
  Class            JorisRos\BoilerPlateBundle\Service\Example
  Tags             -
  Public           yes
  Synthetic        no
  Lazy             no
  Shared           yes
  Abstract         no
  Autowired        no
  Autoconfigured   no
  Usages           none
 ---------------- --------------------------------------------
 ```
 Then the bundle is succesful installed.
