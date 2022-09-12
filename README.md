# Webbtjänst skapad med Laravel
Denna webbtjänst har skapats med hjälp av Laravel. Det är en mall för ett API som lagrar information om olika spel man äger.
Webbtjänsten har funktioner för att hämta, uppdatera, lägga till och radera data. Det finns även en implementerad sökfunktion.

## Användning av webbtjänst

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
Webbtjänsten har laddats upp till en liveserver med Heroku. Här kan man direkt interagera med API:t och prova olika funktioner.

**Länk:** x
