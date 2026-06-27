# OrangeHRM - Construction Payroll QA Test Suite

Forked from [orangehrm/orangehrm](https://github.com/orangehrm/orangehrm) for QA Engineering assignment.

## About This Fork

This fork adds a quality assurance test suite focused on **construction payroll accuracy** — because every bug in this system is someone's missed wage.

## QA Test Coverage

| Ticket | Test | What It Protects |
|--------|------|-----------------|
| #1 | Basic Salary Calculation | Worker gets correct monthly pay |
| #2 | Overtime Calculation | 1.5x rate applied correctly |
| #3 | Invalid Overtime Detection | Negative hours flagged before payslip |
| #4 | Payslip with PF & Tax Deductions | Net salary calculated accurately |
| #5 | Unregistered Worker Payroll Block | No payslip for unonboarded workers |

## How to Run Tests

```bash
composer install
./vendor/bin/phpunit tests/PayrollTest.php
```

## Key Insight

The most vulnerable person in this system is the daily wage construction worker. A payroll error doesn't mean a delayed bonus — it means their family doesn't eat this month. Every test in this suite is written with that in mind.

## Folder Structure

```
tests/
└── PayrollTest.php   # 5 QA tickets covering payroll pipeline
```
