# Challenges

First, finish all the challenges so far.

### `POST /shops`

Adds a "shop" with the following attributes:

- `name`: the shop name (e.g. `Blackwells`)
- `url`: the shop's URL (e.g. `http://www.blackwells.co.uk`)

### Modify: `POST /shops`

Add ability to accept an attribute `books`, which consists of an array of book IDs.

Will need to add handling into your `Books` Controller's `store` method to support this with a `sync` method.

### `PUT /shops/{shop}/books`

Books can be sold by multiple shops and shops can stock multiple books. This route should accept an attribute `books`, which consists of an array of book IDs. These books should be added to the shop's inventory of books.

### `GET /shops/{shop}/books`

Should list all of the books that a shop sells

### `GET /books/{book}/shops`

Should list all of the shops that a book can be bought at

---

A finished version of the Library API is [available on GitHub](https://github.com/develop-me/library-api)
