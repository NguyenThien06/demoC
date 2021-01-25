#include<conio.h>
#include<stdio.h>
#include<stdlib.h>
 void nhapmang(int *a,int &n){
 	for(int i=0;i<n;i++){
 		printf("Nhap so thu %d ",i);
 		scanf("%d",&a[i]);
	 }
 }
 void XuatMang(int *a,int n){
 	for(int i=0;i<n;i++){
 		printf("%5d",a[i]);
	 }
 }
int main(){
	int *a;
	int *a;
//	a = (int *)realloc(0,sizeof(int *));
    a = (int *)malloc(sizeof(int *));
//    a  = (int *)calloc( 1,sizeof(int *)); // con tro vo kieu 
	*a = 69;
	printf("\n gia tri cua a laf %d",*a);
	
	
	}
