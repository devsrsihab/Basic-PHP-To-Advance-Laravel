
-- select max salary fo employees
SELECT * FROM `employees_info` WHERE esalary=(SELECT MAX(esalary) FROM employees_info)

-- select second max salary of employees
select * from `employees_info` where esalary =(select max(esalary) from employees_info where esalary < (select max(esalary) from employees_info where esalary < (select max(esalary) from employees_info)  ))