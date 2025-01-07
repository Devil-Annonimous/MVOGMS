#include <iostream>
#include <string>
#include <vector>
bool isIdentifier(char c) {
    return (c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z');
}
int main() {
    std::string input;
    std::cout << "Enter the expression: ";
    std::getline(std::cin, input);
    std::vector<std::string> identifiers;
    std::string currentIdentifier;
    for (char c : input) {
        if (isIdentifier(c)) {
            currentIdentifier += c;
        } else {
            if (!currentIdentifier.empty()) {
                identifiers.push_back(currentIdentifier);
                currentIdentifier.clear();
            }
        }
    }

    if (!currentIdentifier.empty()) {
        identifiers.push_back(currentIdentifier);
    }
    std::cout << "Identifiers in the expression:\n";
    for (const auto& identifier : identifiers) {
        std::cout << identifier << " is an identifier.\n";
    }
    return 0;
}
