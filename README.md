MEGAPARTS Internship - Task 7

User Management System

Requirements:

1. Create a `User` class:

   - The `User` class should have properties for storing user details like `id`, `username`, `email`, and `role`.

   - Implement getter and setter methods for these properties.

   - Include a constructor to initialize the properties when a new user object is created.

- Create a simple web interface to interact with the user management system.


2. Create a `Database` class:

   - The `Database` class should handle the database connection using OOP concepts.

   - Include methods for executing SQL queries (e.g., `query`, `execute`, etc.).

   - Implement methods for CRUD operations (`create`, `read`, `update`, `delete`) for user records using prepared statements.


3. Implement the following functionalities:

   - Adding a new user.

   - Retrieving user information by providing the user's `id`.

   - Updating user information.

   - Deleting a user by providing the user's `id`.


4. Create a `UserManagement` class:

   - This class will act as the main interface for managing users.

   - It should have methods for invoking the CRUD operations on the `User` class using the `Database` class.