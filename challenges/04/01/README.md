# Challenges

First, finish the challenges up until this point. Then add the additional functionality below to the `library` API.

- Add validation to your API

### `POST /authors`

Adds an "author" with the following attributes:

- `first_name`: the author's first name
- `last_name`: the author's last name

### `POST/PUT /books`

For the purposes of this exercise, assume that an author can write many books, but that a book can only have a single author.

Update your `POST` and `PUT` methods for books so that they accept an `author_id` attribute. It shouldn't be possible to add a book without an `author_id` and the `author_id` must match an existing author.

You'll need to clear your database before doing this, otherwise you won't be able to set up the foreign keys. You can do this with `artisan migrate:fresh`.

You'll also need to create a migration to update your `books` table. See [Database: Migrations](https://laravel.com/docs/5.6/migrations#columns) for more information. Make sure your `down` method reverses your `up` method.

---

A finished version of the Library API is [available on GitHub](https://github.com/develop-me/library-api)
