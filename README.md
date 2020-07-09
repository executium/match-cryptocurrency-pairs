![pair matching engine](https://i.imgur.com/Ha52Lf1.jpg)

# Pair Matching Engine: Discover where you can trade a pair

**Table of Contents**

- [General Information](#general-information)
	- [Useful affiliated repositories](#userful-affiliated-repositories)
- [HTTP Return Codes](#http-return-codes)
- [Error Codes](#error-codes)
- [API Information](#api-information)
	- [Match Pair](#match-pair) (public/match-pair)
	- [Symbols](#symbols) (system/symbols)



## General Information
This repository concentrates on the `endpoint` `POST /api/v2/public/match-pair` designed to provide advice and inspiration for where you can trade specific pairs. The method is of particular use if you are planning to arbitrage a specific pair. This repository is provided as a standalone focused project. It is part of the executium REST API version 2.

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

## Symbols
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


## Recommendation

## Demo

## Exchanges supported
We currently support `24` pairs as of the 9th July 2020. You can learn more about the support we currently have at our [exchanges-support.md](https://github.com/executium/api-version-2/blob/master/exchanges-supported.md) which is kept up to date more regular.
