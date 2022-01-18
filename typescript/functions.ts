const stringLength = (str: string|String) : number => {
    return str.length;
}

console.log(stringLength("hello"))

console.log(stringLength(new String("hello")));