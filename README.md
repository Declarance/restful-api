# REST API
## Films
| Method | Action | Uri example | Info |
|----------------|---------|----------------|-----|
| **POST** | Add new film | http://localhost:8000/api/films | body: key = 'title', value required string; key = 'genre_id, value required integer; key = 'actor_id', value array[integer] |
| **GET** | Get single film | http://localhost:8000/api/films/2 | |
| **GET** | Fetch all films | http://localhost:8000/api/films | |
| **GET** | Fetch all films and sort by title | http://localhost:8000/api/films?sort | params: key = 'sort'|
| **GET** | Fetch all films with genre_id | http://localhost:8000/api/films?genre=3 | params: key = 'genre', value integer|
| **GET** | Fetch all films with actor_id | http://localhost:8000/api/films?actor=2 | params: key = 'actor', value integer |
| **PUT** | Update film | http://localhost:8000/api/films/3?title=Interstellar | params: key = 'title', value string; key = 'genre_id', value integer; key = 'actor_id', value array[integer] |
| **DELETE** | Delete film | http://localhost:8000/api/films/3 | |

## Actors
| Method | Action | Uri example | Info |
|----------------|---------|----------------|-----|
| **POST** | Add new actor | http://localhost:8000/api/actors | body: key = 'name', value required string |
| **GET** | Get single actor | http://localhost:8000/api/actors/3 | |
| **GET** | Fetch all actors | http://localhost:8000/api/actors | |
| **PUT** | Update actor | http://localhost:8000/api/actors/1?name=Adolf | params: key = 'name', value required string |
| **DELETE** | Delete actor | http://localhost:8000/api/actors/2 | |

## Genres
| Method | Action | Uri example | Info |
|----------------|---------|----------------|-----|
| **POST** | Add new genre | http://localhost:8000/api/genres | body: key = 'name', value required string |
| **GET** | Get single genre | http://localhost:8000/api/genres/5 | |
| **GET** | Fetch all genres | http://localhost:8000/api/genres | |
| **PUT** | Update genre | http://localhost:8000/api/genres/4?name=Comedy | params: key = 'name', value required string |
| **DELETE** | Delete genre | http://localhost:8000/api/genres/4 | |

