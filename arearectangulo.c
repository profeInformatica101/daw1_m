#include <stdio.h>

int main() {
	double base, altura;
	printf("Introduce la base del rectángulo: ");
	scanf("%lf", &base);
	printf("Introduce la altura del rectángulo: ");
	scanf("%lf", &altura);
	double area = base * altura;
	printf("El área del rectángulo es: %lf\n", area);
	return 0;
}
