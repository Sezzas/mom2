# Webbtjänst skapad med Laravel
Denna webbtjänst har skapats med hjälp av Laravel. Det är en mall för ett API som lagrar information om olika spel man äger.
Webbtjänsten har funktioner för att hämta, uppdatera, lägga till och radera data. Det finns även en implementerad sökfunktion.

## Installering av webbtjänst

### Egen server
Filerna i detta repository kan klonas ner för att själv användas. Se till att ha Laravel installerat och en databashanterare. En databas med tillhörande användare
behöver skapas och inställningarna till denna databas skrivs in i filen *.env*. Använd sedan `php artisan migrate` för att skapa tabellen för databasen.

Såhär ska tabellen se ut:
| Kolumn | Beskrivning |
| ------ | ----------- |
| id | bigint(20) |
| name | varchar(255) |
| hours | int(11) |
| finished | tinyint(1) |
| created_at | timestamp |
| updated_at | timestamp |

### Live-server
Webbtjänsten har laddats upp till en liveserver med Heroku. Här kan man direkt interagera med API:t och prova olika funktioner genom att kopiera dess URL.

**Länk:** x

## Användning av webbtjänst
För att använda webbtjänsten krävs en klient att testköra i som kan använda metoderna GET, POST, PUT och DELETE. Information inuti { } motsvarar din egna input.

### Sökvägar
| Metod | Ändpunkt | Beskrivning |
| ----- | -------- | ----------- |
| GET | /api/games | Hämtar information om alla spel |
| GET | /api/games/{id} | Hämtar information om spelet som matchar angett ID |
| GET | /api/games/search/name/{namn/del av namn} | Sökfunktion för API:t. Hämtar alla spel vars namn matchar sökningen på något vis. |
| POST | /api/games | Lagrar information om ett nytt spel *(kräver att information skickas med t.ex. JSON-format)* |
| PUT | /api/games/{id} | Uppdaterar information om ett spel |
| DELETE | /api/games/{id} | Raderar ett spel |

### JSON-format
Vid uppdatering och lagring av data kan man behöva skicka med ett objekt i JSON-format. De formas då på följande vis:
```
{
    "name" : "Namn",
    "hours" : 2,
    "finished" : true/false
}
```
*Observera att alla fält måste skickas med även vid uppdatering.*
