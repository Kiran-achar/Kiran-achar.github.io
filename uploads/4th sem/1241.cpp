#include<iostream.h>
#include<conio.h>
void main( )
{
	int *pint[5];
	int a=10,b=20,c=30,d=40,e=50;
	pint[0]=&a;
	pint[1]=&b;
	pint[2]=&c;
	pint[3]=&d;
	pint[4]=&e;
	for(int i=0;i<=4;i++)
cout<<”Value”<<*pint[i]<<”stored at”<<pint[i]<<endl;
}
