# Teste Back 2017 
Site de consultório médico para captura de leads de possíveis clientes.

## Começando
* [Pré-requisitos](#pré-requisitos)
* [Instalação](#instalação)
* [Rodando os testes](#rodando-os-testes)

### Pré-requisitos
* PHP 7.1
* [Composer](https://getcomposer.org/download/)
* [Virtualbox](https://www.virtualbox.org/wiki/Downloads) / [VMWare](https://my.vmware.com/web/vmware/downloads)
* [Vagrant](https://www.vagrantup.com/downloads.html)

### Instalação
Clone o projeto 

```bash
git clone git@github.com:Domeniqque/test-back-2017.git
```

Na pasta do projeto, instale as dependências e copie o arquivo **.env.example**
 
```bash
composer install
cp .env.example .env
php artisan key:generate
```

Se for usar o Vagrant, execute na pasta do projeto: 

```bash
vagrant up
vagrant ssh
cd Code
php artisan migrate --seed
``` 
A aplicação estará disponível na url `http://192.168.10.10`

### Rodando os Testes
Para executar os testes:

```bash
vendor/bin/phpunit
```

Se estiver usando o Vagrant, não esqueça de executar dentro da conexão ssh:

```bash
vagrant ssh
cd Code
vendor/bin/phpunit
```
