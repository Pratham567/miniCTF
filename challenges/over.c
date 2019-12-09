#include <stdio.h>

void print_flag(a){
	if (a){
		printf("CTF{not_the_flag}\n");
	}
	else{
		printf("Try harder\n");
	}
}


int main(){
	setvbuf(stdout, NULL, _IONBF, 0);
	int a=0;
	char s[500];
	gets(s);
	print_flag(a);
	return 0;
}