![pair matching engine](https://i.imgur.com/TEqW8SK.jpg)

# Pair Matching Engine: Discover where you can trade a pair

**Table of Contents**

- [General Information](#general-information)
	- [Useful affiliated repositories](#userful-affiliated-repositories)
- [HTTP Return Codes](#http-return-codes)
- [Error Codes](#error-codes)
- [API Information](#api-information)
	- [Match Pair](#match-pair) (public/match-pair)
	- [Symbols Supported](#symbols-supported) (system/symbols)
	- [Fetch Symbol Price](#fetch-symbol-price) (public/fetch-symbol-price)
- [What can I do with this?](#what-can-i-do-with-this)
- [Demo](#demo)
- [Exchanges supported](#exhcanges-supported)

## General Information
This repository concentrates on the `endpoint` `POST /api/v2/public/match-pair` designed to provide advice and inspiration for where you can trade specific pairs. The method is of particular use if you are planning to arbitrage a specific pair. This repository is provided as a standalone focused project. It is part of the executium REST API version 2.

* The base for public `marketdata` is : **`marketdata.executium.com`**
* All endpoints return either a JSON object or array.
* Data returned is limited according to subscription.
* Timestamp fields vary and are labeled to their corresponding contents of **milliseconds** or **time**

#### Useful affiliated repositories

- [executium REST API Version 2](https://github.com/executium/api-version-2/blob/master/rest-api.md)
- [executium Trending News SDKs](https://github.com/executium/trending-historical-cryptocurrency-news)

## HTTP Return Codes

* HTTP `4XX` return codes are used for malformed requests where the issue exists with the sender.
* HTTP `418` return code is used when an IP has been banned automatically for continuing to send requests after receiving `429` codes.
* HTTP `422` return code is applied when a user input is unexpected.
* HTTP `429` return code is used when breaking a request rate limit.
* HTTP `5XX` return codes are used for internal errors.

## Error Codes
* Any endpoint has the ability to return an ERROR

Sample Payload below:
```javascript

"data": {
  "code": 1440,
  "error": "Missing POST parameter(s) required to proceed, review 'missing_parameters' for more information."
},
```   
   
## API Information
As follows is a run down of advisiable and accessible `endpoints` for usage for the `match-cryptocurrency-pairs` portion of executium.


#### Match Pair
This system is provided to give insight into a `pairing` and where you can also trade it. For this endpoint we accept both `POST` and `GET`. An example of `GET` would be `https://marketdata.executium.com/api/v2/public/match-pair?code=btcusdt`. Please review [Symbols Supported](#symbols-supported) (system/symbols) for more information about pairs.

**Example scenario**
You are looking to find who else support BTCUSDT, the same way Binance do. You would run the following query:

```
GET https://marketdata.executium.com/api/v2/public/match-pair?code=btcusdt
```

The output of that query would be as follows:

```javascript
{
  "data": {
    "pair": "btcusdt",
    "count": 14,
    "active": [
      "Binance",
      "Bitfinex",
      "Bitmart",
      "Bitmax",
      "Bittrex",
      "Ftx",
      "Gateio",
      "Huobipro",
      "Kraken",
      "Kucoin",
      "Liquid",
      "Okex",
      "Poloniex",
      "Upbit"
    ],
    "detail": {
      "binance": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": 0.01,
        "pp": 2,
        "pa": 6
      },
      "bitfinex": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "UST",
        "base": "BTC",
        "min": 0.000009999999999999999,
        "pp": 5,
        "pa": -1
      },
      "bitmart": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": -1,
        "pp": 2,
        "pa": 5
      },
      "bitmax": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "pp": 9,
        "pa": 5
      },
      "bittrex": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": 1e-8,
        "pp": 8,
        "pa": 8
      },
      "ftx": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": 0.5,
        "pp": 0.5,
        "pa": 0.0001
      },
      "gateio": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "usdt",
        "base": "btc",
        "min": 0.01,
        "pp": 2,
        "pa": 8
      },
      "huobipro": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "usdt",
        "base": "btc",
        "min": 0.01,
        "pp": 2,
        "pa": 6
      },
      "kraken": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "XXBT",
        "min": 0.1,
        "pp": 1,
        "pa": 8
      },
      "kucoin": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": 0.1,
        "pp": 1,
        "pa": 8
      },
      "liquid": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": 0.000001,
        "pp": 6,
        "pa": 8
      },
      "okex": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": 0.1,
        "pp": 0.1,
        "pa": 1e-8
      },
      "poloniex": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": 1e-8,
        "pp": 8,
        "pa": 8
      },
      "upbit": {
        "id": "btcusdt",
        "symbol": "BTC/USDT",
        "quote": "USDT",
        "base": "BTC",
        "min": 1e-8,
        "pp": 8,
        "pa": 8
      }
    },
    "possible_combinations": 196
  },
  "meta": {
    "api_version": 2,
    ...
    ...
    ...
  }
}

```

This tells us everywhere which supports `BTCUSDT` and where we can trade. 

```
POST /api/v2/public/match-pair
```

**Parameters:**
Name | MinLength | Required | Default | Description
------------ | ------------ | ------------ | ------------ | ------------
code | 1 | YES |  | Provide a pair such as `btcusdt` to discover where else you can trade the pairing `btcusdt`. Exclude the exchange code from your query and request just the pair like shown.

#### Symbols Supported
All symbols listed and supported on executium. This `endpoint` also accepts `GET`, you can filter the data using the `exchange` parameter, for example `GET /api/v2/system/symbols?exchange=bifinex`.

```
POST /api/v2/system/symbols
```

**Parameters:**
Name | MinLength | Required | Default | Description
------------ | ------------ | ------------ | ------------ | ------------
exchange |  | NO |  | Filter the data by exchange.


**Successful Response Payload:**
```javascript
{
  "data": {
    "binance": [
      {
        "id": "ethbtc",
        "symbol": "ETH/BTC",
        "quote": "BTC",
        "base": "ETH",
        "min": 0.000001,
        "pp": 6,
        "pa": 3
      },
      {
        "id": "ltcbtc",
        "symbol": "LTC/BTC",
        "quote": "BTC",
        "base": "LTC",
        "min": 0.000001,
        "pp": 6,
        "pa": 2
      },
      ...
      ...
      ...
    "bitfinex": [
      {
        "id": "btcusd",
        "symbol": "BTC/USD",
        "quote": "USD",
        "base": "BTC",
        "min": 0.000009999999999999999,
        "pp": 5,
        "pa": -1
      },
      {
        "id": "ltcusd",
        "symbol": "LTC/USD",
        "quote": "USD",
        "base": "LTC",
        "min": 0.000009999999999999999,
        "pp": 5,
        "pa": -1
      },
      ...
      ...

      
```

### Fetch Symbol Price
Public API but restrictions apply based on your subscription level. You must provide the exact `symbol` code which executium provides. You can review symbols in the `system/symbols` endpoint. For this endpoint we accept both `POST` and `GET`. An example of `GET` would be `https://marketdata.executium.com/api/v2/public/fetch-symbol-price?code=binance-btcusdt`.

```
POST /api/v2/public/fetch-symbol-price
```

**Parameters:**
Name | MinLength | Required | Default | Description
------------ | ------------ | ------------ | ------------ | ------------
code |  | YES |  | The executium code, which can be found at [exchanges-supported.md](./exchanges-supported.md) or by calling the endpoint `system/symbols`. This endpoint can taken multiple inputs and is comma delimited. For example you could input `binance-btcusdt,bitfinex-tnbbtc,bitfinex-btcusd`. To a maximum of 10 inputs.

**Successful response payload**

```
  "data": {
    "binance-btcusdt": {
      "bids": {
        "price": 9410.77,
        "qty": 2.25,
        "time": 1594277489758
      },
      "asks": {
        "price": 9411.6,
        "qty": 0.009037,
        "time": 1594277489759
      }
    },
    "bitfinex-btcusdt": {
      "bids": {
        "price": 9407.1,
        "qty": 0.05118678,
        "time": 1594277489695
      },
      "asks": {
        "price": 9411.8,
        "qty": 0.010091,
        "time": 1594277478643
      }
    },
    "notes": "Refresh rate 1000-1500ms; To adjust please review your subscription."
  },
```

## What can I do with this?
The idea is that you can pull the publicly accessible `endpoints` and create informative projects around it. For example, you could mix the symbols with the prices available at each exchange by doing the following:

1. Pull Matching Pairs
2. Store those
3. Poll the `public/fetch-symbol-price` endpoint for data.
4. Map the polled data to corresponding symbols.

## Demo
![demo](https://i.imgur.com/HvZaVXF.jpg)

You can [find the match pairs demo here](https://marketdata.executium.com/demo/). This provides a real-time look at data being returned. It also provides a look at symbol and feteching symbol prices.

## Exchanges supported
We currently support `24` pairs as of the 9th July 2020. You can learn more about the support we currently have at our [exchanges-support.md](https://github.com/executium/api-version-2/blob/master/exchanges-supported.md) which is kept up to date more regular.
