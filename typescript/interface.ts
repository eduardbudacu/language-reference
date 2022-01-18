interface User {
    name: string
    age: number
}

const saveUser = (user: User) => {
    //do somenthing with the user object
}

//this is ok
saveUser({name: 'Eduard', age: 34})

//this is not respectful of the interface
//saveUser({firstName: 'Eduard', age: 34});