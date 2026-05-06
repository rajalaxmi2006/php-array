# 📘 PHP Arrays — Complete Guide & Examples

A beginner-friendly project demonstrating the fundamentals of **arrays in PHP**, including indexed arrays, associative arrays, and basic operations like accessing, updating, and adding elements.

---

## 📌 Table of Contents

* [Overview](#-overview)
* [What is an Array?](#-what-is-an-array)
* [Types of Arrays](#-types-of-arrays)
* [Project Code](#-project-code)
* [Code Breakdown](#-code-breakdown)
* [Output](#-output)
* [How to Run](#-how-to-run)
* [Key Concepts Covered](#-key-concepts-covered)
* [Common Mistakes](#-common-mistakes)
* [Future Improvements](#-future-improvements)
* [Author](#-author)

---

## 📖 Overview

This project introduces **PHP arrays**, one of the most essential data structures in backend development. It shows how to:

* Store multiple values
* Access and modify elements
* Work with key-value pairs
* Use built-in array functions

---

## 🧠 What is an Array?

An **array** is a data structure used to store multiple values in a single variable.

✔ Supports **multiple data types**
✔ Automatically indexed (starting from 0)
✔ Dynamically resizable

---

## 📂 Types of Arrays

### 1️⃣ Indexed Array

Uses numeric indexes.

```php
$name = ["Raj", "Subha", "Laxmi"];
```

---

### 2️⃣ Associative Array

Uses key-value pairs.

```php
$cars = [
    "brand" => "BMW",
    "model" => "X7",
    "price" => "5cr"
];
```

---

### 3️⃣ Multidimensional Array

An array inside another array.

```php
$students = [
    ["Raj", 21],
    ["Subha", 20]
];
```

---

## 💻 Project Code

```php
<?php

$name1 = "Raj";
$name2 = "Subha";
$name3 = "Laxmi";

$name = ["Raj", "Subha", "Laxmi"];

$flowers = array("Tulips", "Periwinkles", "Daffodils", "Roses");
print_r($flowers);

$cars = [
    "brand" => "BMW",
    "model" => "X7",
    "price" => "5cr"
];
print_r($cars);

echo $flowers[1];

$flowers[1] = "Marigold";
$flowers[] = "Jashmin";
array_push($flowers, "Sunflowers");

print_r($flowers);

?>
```

---

## 🔍 Code Breakdown

### 🔹 Array Creation

```php
$flowers = array("Tulips", "Periwinkles", "Daffodils", "Roses");
```

Creates an indexed array of flower names.

---

### 🔹 Printing Arrays

```php
print_r($flowers);
```

Displays array contents in a readable format.

---

### 🔹 Accessing Elements

```php
echo $flowers[1];
```

Accesses the second element (index starts at 0).

---

### 🔹 Updating Elements

```php
$flowers[1] = "Marigold";
```

Replaces an existing value.

---

### 🔹 Adding Elements

```php
$flowers[] = "Jashmin";
array_push($flowers, "Sunflowers");
```

Adds new values to the array.

---

### 🔹 Associative Array

```php
$cars = [
    "brand" => "BMW",
    "model" => "X7",
    "price" => "5cr"
];
```

Stores data using meaningful keys.

---

## 🖥 Output

```
Array
(
    [0] => Tulips
    [1] => Periwinkles
    [2] => Daffodils
    [3] => Roses
)

Array
(
    [brand] => BMW
    [model] => X7
    [price] => 5cr
)

Periwinkles

Array
(
    [0] => Tulips
    [1] => Marigold
    [2] => Daffodils
    [3] => Roses
    [4] => Jashmin
    [5] => Sunflowers
)
```

---

## 🚀 How to Run

### 1. Install PHP

Check installation:

```bash
php -v
```

---

### 2. Save the File

Save as:

```
index.php
```

---

### 3. Run in Terminal

```bash
php index.php
```

---

## 🧩 Key Concepts Covered

* Indexed arrays
* Associative arrays
* Array manipulation
* Dynamic insertion
* Built-in PHP functions

---

## ⚠️ Common Mistakes

❌ Using wrong index (out of bounds)
❌ Forgetting `$` in variable names
❌ Confusing `print_r()` with `echo`
❌ Typo in function names

---

## 🔮 Future Improvements

* Add **multidimensional array examples**
* Build a **simple PHP UI to display arrays**
* Integrate with **database (MySQL)**
* Convert into a **REST API**

---

## 👨‍💻 Author
Aspiring Full-Stack Developer 🚀

---

## ⭐ Support

If you found this helpful, consider giving the project a ⭐ on GitHub!
