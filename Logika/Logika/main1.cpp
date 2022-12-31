#include <iostream>

using namespace std;

bool i(bool A, bool B) {

	return (!A || B);
}

bool nand(bool A, bool B) {

	return !(A && B);
}

bool nor(bool A, bool B) {

	return !(A || B);
}

int main() {

	bool A = 1;
	bool B = 1;
	bool C = 0;

	bool allitas = nor((A xor C), i(!B, A == C) && nand((B xor A), !B));

	cout << allitas << endl;
	
	return 0;
}