### Sikkim Store
Multi Vendor, Multi-Tenant Ecommerce Marketplace.
##
##
### Installation

#### Clone this repository.
```shell
git clone https://github.com/raynirola/sikkim.store.git sikkim-store
```


#### Install dependencies.
```shell
composer install
```

#### Setup Database and then
```shell
cp .env.example .env
```
```shell
php artisan key:generate
```
```shell
php artisan storage:link
```
```shell
php artisan migrate --seed
```
