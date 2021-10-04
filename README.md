# REST API
____
##Films
| Method | Action | Uri example | Info |
|----------------|---------|----------------|-----|
| **POST** | Add new film | http://localhost:8000/api/films | body: key = 'title', value required |
| **GET** | Get single film | http://localhost:8000/api/films/2 | |
| **GET** | Fetch all films | http://localhost:8000/api/films | |
| **PUT** | Update film | http://localhost:8000/api/films/3?title=Interstellar | params: key = 'title', value required |
| **DELETE** | Delete film | http://localhost:8000/api/films/3 | |

##Actors
| Method | Action | Uri example | Info |
|----------------|---------|----------------|-----|
| **POST** | Add new actor | http://localhost:8000/api/actors | body: key = 'name', value required |
| **GET** | Get single actor | http://localhost:8000/api/actors/3 | |
| **GET** | Fetch all actors | http://localhost:8000/api/actors | |
| **PUT** | Update actor | http://localhost:8000/api/actors/1?name=Adolf | params: key = 'actors', value required |
| **DELETE** | Delete actor | http://localhost:8000/api/actors/2 | |

##Genres
| Method | Action | Uri example | Info |
|----------------|---------|----------------|-----|
| **POST** | Add new genre | http://localhost:8000/api/genres | body: key = 'name', value required |
| **GET** | Get single genre | http://localhost:8000/api/genres/5 | |
| **GET** | Fetch all genres | http://localhost:8000/api/genres | |
| **PUT** | Update genre | http://localhost:8000/api/genres/4?name=Comedy | params: key = 'name', value required |
| **DELETE** | Delete genre | http://localhost:8000/api/genres/4 | |