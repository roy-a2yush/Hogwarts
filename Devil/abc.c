#define s "\45d"
n,a,_=0;
z() {
    
}
y() {
    n-=1;
x();
_+=a;
n!=0?y():z();
}
x() {
scanf(s,&a);
}
main() {
x();
n=a;
y();
printf(s,_);
}                          