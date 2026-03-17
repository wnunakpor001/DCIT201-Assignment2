<?php
// Include the class file
require_once "BankAccount.php";

// Create object
$account = new BankAccount("123456789", "Wisdom Nunakpor", 500);

// Test operations
$account->deposit(500); // Valid
$account->deposit(-100); // Invalid

$account->withdraw(900); // Valid
$account->withdraw(1000);   // Invalid

echo "The account number is: " .$account->getAccountNumber() . "\n";
echo "Final Balance: $" . $account->getBalance() . "\n\n";



require_once "Student.php";

// Valid student
$student1 = new Student("22308278", "Wisdom Nunakpor", 88);
echo "Name: " . $student1->getName() . "\n";
echo "Score: " . $student1->getScore() . "\n";
echo "Grade: " . $student1->getGrade() . "\n\n";

// Invalid score test
$student1->setScore(-10);


require_once "Employee.php";
require_once "FullTimeEmployee.php";
require_once "PartTimeEmployee.php";

// Full-time employee
$fullTime = new FullTimeEmployee("Wisdom Nunakpor", 3000, 2000);

// Part-time employee
$partTime = new PartTimeEmployee("Senyo Nunakpor", 100, 20);

// Output
echo "Full-Time Annual Salary: $" . $fullTime->calculateAnnualSalary() . "\n";
echo "Part-Time Annual Salary: $" . $partTime->calculateAnnualSalary() . "\n\n";


require_once "Vehicle.php";
require_once "Car.php";
require_once "Motorcycle.php";

// Create objects
$car = new Car("Honda");
$bike = new Motorcycle("Haojie");

// Test methods
echo $car->startEngine() . "\n";
echo $bike->startEngine() . "\n\n";



require_once "Payment.php";
require_once "CreditCardPayment.php";
require_once "MobileMoneyPayment.php";
require_once "BankTransferPayment.php";

// Create objects
$payments = [
    new CreditCardPayment(),
    new MobileMoneyPayment(),
    new BankTransferPayment()
];

// Process payments using loop (Polymorphism)
foreach ($payments as $payment) {
    echo $payment->processPayment(500) . "\n\n";


require_once "ATMOperations.php";
require_once "BankATM.php";

// Create ATM object
$atm = new BankATM(1000);

// Perform operations
$atm->deposit(500);      // Valid
$atm->deposit(-50);      // Invalid

$atm->withdraw(300);     // Valid
$atm->withdraw(2000);    // Invalid

$atm->checkBalance();
}



