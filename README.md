# API для работы с Тинькофф Инвестиции

[![Language](https://img.shields.io/badge/php-%5E5.6-blue)](https://img.shields.io/badge/php-%5E5.6-blue) [![Language](https://img.shields.io/badge/ApiGate-%5E0.1.4-brightgreen)](https://img.shields.io/badge/ApiGate-%5E0.1.4-brightgreen)

Инструмент для работы с [API Тинькофф Инвестиции](https://tinkoffcreditsystems.github.io/invest-openapi/) из PHP. Данный проект реализован на базе фреймворка **[ApiGate](https://github.com/moss-maurice/apigate)**. Запросы и ответы соответствуют схемам, указанным в официальной документации.

#### Реализованные методы
**sandbox**
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/sandbox/register***
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/sandbox/currencies/balance***
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/sandbox/positions/balance***
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/sandbox/remove***
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/sandbox/clear***

**orders**
- ![GET-method](https://img.shields.io/badge/GET-green) ***/orders***
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/orders/limit-order***
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/orders/market-order***
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/orders/cancel***

**portfolio**
- ![GET-method](https://img.shields.io/badge/GET-green) ***/portfolio***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/portfolio/currencies***

**market**
- ![GET-method](https://img.shields.io/badge/GET-green) ***/market/stocks***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/market/bonds***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/market/etfs***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/market/currencies***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/market/orderbook***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/market/candles***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/market/search/by-figi***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/market/search/by-ticker***

**operations**
- ![GET-method](https://img.shields.io/badge/GET-green) ***/operations***

**user**
- ![GET-method](https://img.shields.io/badge/GET-green) ***/user/accounts***

#### Установка
Установка производится через Composer:
```sh
composer require mmaurice/tinkoff-invest-api
```

#### Примеры кода
В каталоге `/example` представлены примеры кода. Для работы с библиотекой, необходимо указать свой token для среды **sandbox** (`/example/configs/SandboxConfig`) и **production** (`/example/configs/Config`), предварительно пройдя процедуру [авторизации](https://tinkoffcreditsystems.github.io/invest-openapi/auth/).

#### Ссылки
- [Официальная документация по OpenAPI](https://tinkoffcreditsystems.github.io/invest-openapi/)
- [Документация Swagger](https://tinkoffcreditsystems.github.io/invest-openapi/swagger-ui/)
