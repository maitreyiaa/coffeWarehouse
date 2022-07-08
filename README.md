## My Beans 

This is a simple PHP - Laravel CRUD web application that allows users to Create/Read/Update/Delete Coffee Beans data.

## `CoffeeBeans` Model Schema
has following attributes:
- Id
- Name (text)
- Level (One of: decaf, low, medium, high)
- Harga (numerical value)
- proses (One of: washed, honey black, other)
- variasi (One of : light, medium, dark, french)
- ketinggian (One of: whole-bean, mix-varient, dominant)
- asal (text)

## `CoffeeBeans` Routes

| HTTP Method   | URL Path           | Result                           | 
|:--------------|:-------------------|:---------------------------------| 
| GET           | /                  | index of `CoffeeBeans            | 
| POST          | /beans             | create `CoffeeBeans              | 
| GET           | /beans/`id`/edit   | show single `CoffeeBeans` info   | 
| PUT           | /beans/`id`        | update `CoffeeBeans`.            | 
| DELETE        | /beans/`id`        | delete `CoffeeBeans`.            |



## Technologies Used

- PHP
- Laravel Framework
- HTML
- CSS/SCSS
- Git


## Unsolved Problems 

- When user updates data, multiple select attributes data reset automatically
- Delete confirmation message
- Styling 

