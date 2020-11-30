<?php

require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');

use \mmaurice\apigate\ClientException;
use \mmaurice\api\tinkoff\invest\Client;
use \mmaurice\api\tinkoff\invest\example\configs\SandboxConfig;
use \mmaurice\api\tinkoff\invest\types\CandleResolutionType;
use \mmaurice\api\tinkoff\invest\types\OperationType;
use \mmaurice\api\tinkoff\invest\types\SandboxCurrencyType;

try {
    $client = Client::init();
    $client->config(new SandboxConfig);

    $figi = 'BBG004730JJ5'; // Московская Биржа

    // Регистрация аккаунта
    $sandboxRegisterResults = Client::callMethod('sandbox/register', [
        'brokerAccountType' => 'Tinkoff',
    ]);
    //var_dump($sandboxRegisterResults);

    if ($sandboxRegisterResults instanceof \mmaurice\api\tinkoff\invest\schemas\sandbox\SandboxRegisterResponseSchema) {
        // Получение списка акций
        $marketStocksResults = Client::callMethod('market/stocks');
        //var_dump($marketStocksResults);

        // Получение списка облигаций
        $marketBondsResults = Client::callMethod('market/bonds');
        //var_dump($marketBondsResults);

        // Получение списка ETF
        $marketEtfsResults = Client::callMethod('market/etfs');
        //var_dump($marketEtfsResults);

        // Получение списка валютных пар
        $marketCurrenciesResults = Client::callMethod('market/currencies');
        //var_dump($marketCurrenciesResults);

        // Получение исторических свечей по FIGI
        $marketCandlesResults = Client::callMethod('market/candles', [
            'figi' => $figi,
            'from' => '2019-11-30T00:00:00+03:00',
            'to' => '2020-11-30T00:00:00+03:00',
            'interval' => CandleResolutionType::CANDLE_RESOLUTION_TYPE_DAY,
        ]);
        //var_dump($marketCandlesResults);

        // Получение стакана по FIGI
        $marketOrderbookResults = Client::callMethod('market/orderbook', [
            'figi' => $figi,
            'depth' => 25,
        ]);
        //var_dump($marketOrderbookResults);

        // Получение инструмента по FIGI
        $marketSearchByFigiResults = Client::callMethod('market/search/byFigi', [
            'figi' => $figi,
        ]);
        //var_dump($marketSearchByFigiResults);

        // Получение инструмента по тикеру
        $marketSearchByTickerResults = Client::callMethod('market/search/byTicker', [
            'ticker' => 'MOEX',
        ]);
        //var_dump($marketSearchByTickerResults);

        // Установка баланса валюты RUB
        $sandboxCurrenciesBalanceResults = Client::callMethod('sandbox/currencies/balance', [
            'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
            'currency' => SandboxCurrencyType::CURRENCY_TYPE_RUB,
            'balance' => 100000,
        ]);
        //var_dump($sandboxCurrenciesBalanceResults);

        // Установка баланса по инструментным позициям
        $sandboxPositionsBalanceResults = Client::callMethod('sandbox/positions/balance', [
            'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
            'figi' => $figi,
            'balance' => 1000,
        ]);
        //var_dump($sandboxPositionsBalanceResults);

        // Создание лимитной заявки
        $ordersLimitResults = Client::callMethod('orders/limit', [
            'figi' => $figi,
            'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
            'lots' => 10,
            'operation' => OperationType::OPERATION_TYPE_BUY,
            'price' => 1234.5,
        ]);
        //var_dump($ordersLimitResults);

        // Создание рыночной заявки
        $ordersMarketResults = Client::callMethod('orders/market', [
            'figi' => $figi,
            'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
            'lots' => 12,
            'operation' => OperationType::OPERATION_TYPE_BUY,
        ]);
        //var_dump($ordersMarketResults);

        // Получение брокерских счетов клиента
        $userAccountsResults = Client::callMethod('user/accounts');
        //var_dump($userAccountsResults);

        // Получение портфолио клиента
        $portfolioPortfolioResults = Client::callMethod('portfolio/portfolio', [
            'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
        ]);
        //var_dump($portfolioPortfolioResults);

        // Получение валютных активов клиента
        $portfolioCurrenciesResults = Client::callMethod('portfolio/currencies', [
            'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
        ]);
        //var_dump($portfolioCurrenciesResults);

        // Получение списка активных заявок
        $ordersOrdersResults = Client::callMethod('orders/orders', [
            'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
        ]);
        //var_dump($ordersOrdersResults);

        // Получение списка операций
        $operationsOperationsResults = Client::callMethod('operations/operations', [
            'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
            'figi' => $figi,
            'from' => '2019-11-01T00:00:00+03:00',
            'to' => '2020-11-30T00:00:00+03:00',
        ]);
        //var_dump($operationsOperationsResults);
    }

    // Удаление всех позиций
    $sandboxClearResults = Client::callMethod('sandbox/clear', [
        'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
    ]);
    //var_dump($sandboxClearResults);

    // Удаление счёта
    $sandboxRemoveResults = Client::callMethod('sandbox/remove', [
        'brokerAccountId' => $sandboxRegisterResults->payload->brokerAccountId,
    ]);
    //var_dump($sandboxRemoveResults);

} catch (ClientException $exception) {
    echo $exception->getMessage();
}

exit;
