# Challenges

**Use Git to make a commit every time you get an answer working. Use sensible commit messages.**

- Get a Homestead box up and running in a project called `library`
- Create a `Book` model (and corresponding database table) with the following properties:
    - `title`: the book title
    - `pages`: the number of pages
    - `published`: the date the book was published
    - `ISBN`: the book's ISBN
    - `rating`: a number between 1 and 5
- Use `artisan tinker` to create some books in the database, use `Book::all()` each time to check that it's worked
