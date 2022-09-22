<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Operator</title>
</head>
<body>
  <h3>Các toán tử số học trong PHP</h3>
  <pre style="font-weight: bold; font-size:14px">
  What is Operator? Simple answer can be given using expression 4 + 5 is equal to 9. 
  Here 4 and 5 are called operands(toán hạng) and + is called operator(toán tử). PHP language support following type pf operators.
  
  + Arithmetic Operators(Toán tử số học).
  + Comparison Operators(Toán tử so sánh).
  + Logical (or Relational) Operators.(Toán tử logic hay quan hệ).
  + Assignment Operators(Toán gán).
  + Conditional (or Ternary) Operators(Toán tử điều kiện).
  Let's have a look on all operators one by one.

    ++ Arithmetic Operators.
  There are following arithmetic operators supported by PHP language.

  Assume variable A holds 10 and variable B holds 20 then. 

  Operator                                        Description                                           Example
  +                         Adds two operands(Cộng 2 số).                                          A + B will give 30
  -                         Subtracts(trừ) second operand from the first                           A - B will give -10 
  *                         Multiply(nhân) both operands                                           A * B will give 200
  /                         Divide(chia) numerator by de-numerator                                 B / A will give 2 
  %                         Modulus Operator add remainder of after an integer division            B % A will give 0
  ++                        Increment operator, increases integer value by one                     A++ will give 11
  --                        Decrement operator, decreases integer value by one                     A-- will give 9

    ++ Comparison Operators 
  There are following comparison operators supported by PHP language. 
  Assume variable A golds 10 and variable B holds 20 then.
  Operator                                        Description                                           Example
  ==        Checks if the value of two operands are equal or not, if yes then condition becomes true. (A == B) is not true.
  ===       As above but both operands are the same type.                                             (A === B) is not true.
  !=, <>    Checks if the value of two operands are equal or not, if values are not equal             (A != B) is true.
            then condition becomes true. 
  !==       As above but both operands are the same type.                                             (A !== B) is true.
  >         Checks if the value of left operand is greater than the value of right operand, if yes    (A > B) is not true.
            then condition becomes true. 
  <         Checks if the value of left operand is less than the value of right operand, if yes       (A < B) is true. 
            then condition becomes true.
  >=        Checks if the value of left operand is greater than or equal to the value of right operand, (A >= B) is not true.
            if yes then condition becomes true.
  <=        Checks if the value of left operand is less than or equal to the value of right operand,   (A <= B) is true. 
            if yes then condition becomes true.

    ++ Logical Operators 
  There are following logical operators supported by PHP language.
  Assume variable A holds 10 and variable B holds 20 then 
  Operator                                        Description(Nội dung đúng với Assume)                  Example
  and       Called Logical AND operator. If both the operands are true then condition becomes true.   (A and B) is true.     
  or        Called Logical OR operator. If any of the two operands are non-zero then condition        (A or B) is true. 
            becomes true. 
  &&        Called Logical AND operator. If both the operands are non-zero then condition             (A && B) is true.      
            becomes true.
  ||        Called Logical OR operator. If any of the two operands are non-zero then condition        (A || B) is true.
            becomes true.
  !         Called Logical NOT operator. Use to reverses the lofical state of its operand.            (A && B) is false. 
            If a condition is true then Logical NOT operator will make false. 
  xor       Called Logical Xor operator. If any of the two operands are non-zero, but not both.       (A xor B) is false.
            then condition becomes true. 
  
    ++ Assignment Operators 
  There are following assignment operators supported by PHP language.
  Operator                                        Description(Nội dung đúng với Assume)                  Example
  =         Simple assignment operator, assigns values from right side operands to left side operand  C = A + B will assign                                                                                                      value of A + B into C. 
  +=        Add AND assignment operator, It adds right operand to the left operand and assign         C += A is equivalent 
            the result to left operand and assign the result to left operand.                         to C = C + A.
  -=        Subtract AND assignment operator, It subtracts right operand from the left operand and    C -= A is equivalent 
            assign the result to left operand.                                                        to C = C - A.
  *=        Multiply AND assignment operator, It multiplies right operand with the left operand and   C *= A is equivalent
            assign the result to left operand.                                                        to C = C * A.
  /=        Divide AND assignment operator, It divides left operand with the right operand and        C /= A i equivalent  
            assign the result to left operand.                                                        to C = C / A.
  %=        Modulus AND assignment operator, It takes modulus using two operands and                  C %= A is equivalent 
            assign the result to left operand.                                                        to C = C % A.

    ++ Conditional Operator 
  There is one more operator called conditional operator. 
  This first evaluates an expression for a true or false value and then execute one of the two given statements depending upon the result of the evaluation.
  Operator                                        Description(Nội dung đúng với Assume)                  Example
  ? :       Conditional Expression                                                                    If Condition is true ?
                                                                                                      then value X : Otherwise value Y  

  Operators Categories 
  All the operators we have discussed above can be categorised into following categories.

  + Unary prefix operators, which precede a single operand.
  + Binary operators, which take two operands and perform a variety of arithmetic and logical operations. 
  + The conditional operator (a ternary operator), which takes three operands and evaluates either the second 
  or third expression, depending on the evaluation of the first expression.
  + Assignment operators, which assign a value to a variable.
  + Precedence of PHP Operators. 
  + Operator precendence determines the grouping of terms in an expression. 
  This affects how an expression is evaluated. Certain operators game higher precedence than others; 
  For example, the multiplication operator has higher precedence than the addition operator.
  + For example X = 7 + 3 * 2; Here x is assigned 13, not 20 because operator * has higher precedence than + so it first get multiplied with 3*2 and then adds into 7.

  Here Operators with the highest precedence appear at the top of the table those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.

  Category                                Operator                                                Asscoiativity 
  Unary                                   ! ++ --                                               Right to left       
  Multiplicative                          * / %                                                 Left to right 
  Additive                                + -                                                   Left to right
  Relational                              < <= > >=                                             Left to right
  Equality                                == !=                                                 Left to right
  Logical                                 AND &&, OR ||                                         Left to right
  Conditional                             ? :                                                   Right to left 
  Assignment                              = += -= *= /= %=                                      Right to left  

  </pre>


  <?php
    /** Testing */
    $a = 10;
    $b = 0;

    if( $a xor $b ){
      echo "we are in comfort zone";
    } else {
      echo  "We aren't in comfort zone";
    }
  ?>

</body>
</html>