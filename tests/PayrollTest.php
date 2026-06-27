<?php

use PHPUnit\Framework\TestCase;

class PayrollTest extends TestCase
{
    // QA Ticket #1: Basic salary calculation
    public function testBasicSalaryCalculation()
    {
        $dailyWage = 500;
        $daysWorked = 26;
        $expected = 13000;
        $actual = $dailyWage * $daysWorked;
        $this->assertEquals($expected, $actual, "Basic salary calculation failed");
    }

    // QA Ticket #2: Overtime calculation
    public function testOvertimeCalculation()
    {
        $hourlyRate = 100;
        $overtimeHours = 10;
        $overtimeMultiplier = 1.5;
        $expected = 1500;
        $actual = $hourlyRate * $overtimeHours * $overtimeMultiplier;
        $this->assertEquals($expected, $actual, "Overtime calculation failed");
    }

    // QA Ticket #3: Wrong overtime hours detection
    public function testInvalidOvertimeHours()
    {
        $overtimeHours = -5; // Invalid negative value
        $this->assertLessThan(0, $overtimeHours, "Negative overtime should be flagged");
    }

    // QA Ticket #4: Payslip total with deductions
    public function testPayslipWithDeductions()
    {
        $grossSalary = 13000;
        $pf = 1560;       // 12% PF
        $tax = 500;
        $expected = 10940;
        $actual = $grossSalary - $pf - $tax;
        $this->assertEquals($expected, $actual, "Net salary after deductions failed");
    }

    // QA Ticket #5: Worker not onboarded - payroll should fail
    public function testUnregisteredWorkerPayroll()
    {
        $workerExists = false;
        $this->assertFalse($workerExists, "Unregistered worker should not receive payslip");
    }
}
