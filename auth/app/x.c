#include <stdio.h>
#include <math.h>
int main()
{
    int octal;
    printf("Enter octal number: ");
    scanf("%d", &octal);
    int decimal = 0, i = 0;
    int binary = 0;
    while (octal != 0)
    {
        decimal = decimal + (octal % 10) * pow(8, i);
        i++;
        octal = octal / 10;
    }
    i = 1;
    while (decimal != 0)
    {
        binary = binary + (decimal % 2) * i;
        decimal = decimal / 2;
        i = i * 10;
    }
    printf("Binary number is: %d", binary);
    return 0;
}
