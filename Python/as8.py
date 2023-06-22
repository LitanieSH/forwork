# Scrabble List
scrabble = [
    'a', 1, 9, 4.8, 'b', 3, 2, 3.2, 'c', 3, 2, 3.2, 'd', 2, 4, 4.3,
    'e', 1, 12, 6.4, 'f', 4, 2, 4.3, 'g', 2, 3, 3.2, 'h', 4, 2, 4.3,
    'i', 1, 9, 4.8, 'j', 8, 1, 4.3, 'k', 5, 1, 2.7, 'l', 1, 4, 2.1,
    'm', 3, 2, 3.2, 'n', 1, 6, 3.2, 'o', 1, 8, 4.3, 'p', 3, 2, 3.2,
    'q', 10, 1, 5.3, 'r', 1, 6, 3.2, 's', 1, 4, 2.1, 't', 1, 6, 3.2,
    'u', 1, 4, 2.1, 'v', 4, 2, 4.3, 'w', 4, 2, 4.3, 'x', 8, 1, 4.3,
    'y', 4, 2, 4.3, 'z', 10, 1, 5.3
]

# Convert Scrabble list to dictionary
scrabble_dict = {}
for i in range(0, len(scrabble), 4):
    letter = scrabble[i]
    score = scrabble[i+1]
    amount = scrabble[i+2]
    ratio = scrabble[i+3]
    scrabble_dict[letter] = {'score': score, 'amount': amount, 'ratio': ratio}

# Define function to calculate score of a word
def calculate_score(word):
    score = 0
    word_dict = {}
    for letter in word:
        letter = letter.lower()
        if letter in word_dict:
            word_dict[letter] += 1
        else:
            word_dict[letter] = 1
        if word_dict[letter] > scrabble_dict[letter]['amount']:
            print(f"Your word '{word}' is not possible. The letter '{letter}' is not enough.")
            return None
        score += scrabble_dict[letter]['score']
    for letter in word_dict:
        scrabble_dict[letter]['amount'] -= word_dict[letter]
    print(f"Total score of '{word}' is {score}")
    return scrabble_dict

# Test the program
print("1) Scrabble List-to-Dictionary Conversion:")
print("="*70)
print(scrabble_dict)
print("="*70)

print("2) Score of your word")
print("="*70)
word = input("Enter Your word [Only alphabets]: ")
result = calculate_score(word)
print("="*70)

if result:
    print("3) Updated Scrabble Dictionary")
    print("="*70)
    print(scrabble_dict)
    print("="*70)
