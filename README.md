# DCIT 201 – Assignment 2 (Object-Oriented Programming in PHP)

## 📌 Overview

This project contains solutions to Assignment 2 for DCIT 201 (Programming I). The assignment focuses on implementing core Object-Oriented Programming (OOP) concepts in PHP, including:

* Encapsulation
* Inheritance
* Polymorphism
* Abstraction
* Interfaces

Each question is implemented in a modular and structured way using separate PHP files.

---

## 📁 Project Structure

```
assignment2/
│
├── Q1_BankAccount/
│   ├── BankAccount.php
│   └── main.php
│
├── Q2_Student/
│   ├── Student.php
│   └── main.php
│
├── Q3_Employee/
│   ├── Employee.php
│   ├── FullTimeEmployee.php
│   ├── PartTimeEmployee.php
│   └── main.php
│
├── Q4_Vehicle/
│   ├── Vehicle.php
│   ├── Car.php
│   ├── Motorcycle.php
│   └── main.php
│
├── Q5_Payment/
│   ├── Payment.php
│   ├── CreditCardPayment.php
│   ├── MobileMoneyPayment.php
│   ├── BankTransferPayment.php
│   └── main.php
│
├── Q6_ATM/
│   ├── ATMOperations.php
│   ├── BankATM.php
│   └── main.php
│
└── README.md
```

---

## ⚙️ Requirements

* PHP 7.0 or higher
* Command line (Terminal, CMD, or PowerShell) or local server (XAMPP, WAMP, etc.)

---

## ▶️ How to Run the Code

1. Open terminal and navigate to the project folder:

   ```bash
   cd assignment2
   ```

2. Run any question's test file:

   ```bash
   php Q1_BankAccount/main.php
   ```

Repeat for other questions.

---

## 🧩 Question Breakdown

### ✅ Question 1 – BankAccount (Encapsulation)

* Private properties: accountNumber, accountHolderName, balance
* Methods: deposit, withdraw, getters
* Validations:

  * No negative deposits
  * No withdrawal beyond balance

---

### ✅ Question 2 – Student (Encapsulation + Validation)

* Private properties: studentId, name, score
* Score restricted between 0–100
* Method: getGrade()
* Demonstrates input validation

---

### ✅ Question 3 – Employee (Inheritance)

* Superclass: Employee
* Subclasses: FullTimeEmployee, PartTimeEmployee
* Method overriding: calculateAnnualSalary()

---

### ✅ Question 4 – Vehicle (Method Overriding)

* Superclass: Vehicle
* Subclasses: Car, Motorcycle
* Demonstrates overriding and use of `parent` keyword

---

### ✅ Question 5 – Payment (Abstraction + Polymorphism)

* Abstract class: Payment
* Subclasses implement processPayment()
* Demonstrates runtime polymorphism using arrays and loops

---

### ✅ Question 6 – ATM (Interface)

* Interface: ATMOperations
* Class: BankATM implements interface
* Demonstrates abstraction and enforced method structure

---

## 💡 Key Concepts Demonstrated

| Concept       | Description                          |
| ------------- | ------------------------------------ |
| Encapsulation | Data hiding using private properties |
| Inheritance   | Reusing code from parent classes     |
| Polymorphism  | Same method, different behavior      |
| Abstraction   | Hiding implementation details        |
| Interface     | Defining method contracts            |

---

## 📝 Notes

* All classes are properly separated for clarity and reuse.
* Input validation is included where necessary.
* Code is written following clean and readable standards.

---

## 👨‍💻 Author

**Name:** Wisdom Nunakpor
**Program** BSc. Computer Science and Statistics
**Course:** DCIT 201 – Programming I
**Institution:** University of Ghana

---

## 🚀 Final Remark

This assignment demonstrates a strong understanding of Object-Oriented Programming in PHP and follows best practices for code organization and readability.

