function Trie() {
    this.words = 0;
    this.prefixes = 0;
    this.children = [];
}


Trie.prototype.insert = function(str, pos) {
    if(str.length == 0) { // impossible d'ajouter une chaîne de caractères vide
        return;
    }

    var T = this,
        k,
        child;
    if(pos === undefined) {  // on se situe à la racine de l'arbre
        pos = 0;
    }
    if(pos === str.length) {  // on ajoute un nouveau mot
        T.words ++;
        return;
    }
    T.prefixes ++;
    k = str[pos];
    if(T.children[k] === undefined) { // si on ne connait pas de suffixe, on l'ajoute
        T.children[k] = new Trie();
    }
    child = T.children[k];
    child.insert(str, pos + 1);
};


Trie.prototype.find = function(word) {
    if (word.trim().length == 0) return "";
    else return this._find(word, 0, "");
};



Trie.prototype._find = function(word, pos, res) {
    if(word.length <= pos) { 
        if (this.prefixes == 0) { return res; }   // pas d'autres résultats
        else { 
            for(var letter in this.children) {    // on récupère seulement le premier résultat trouvé 
                var firstChild = this.children[letter];
                return firstChild._find(word, pos + 1, res + letter); 
            }
        }
    }

    var child = this.children[word[pos]];
    
    if(child === undefined) { return res; }
    else {
        return child._find(word, pos + 1, res + word[pos]);
    }
};
