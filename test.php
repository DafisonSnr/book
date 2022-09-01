*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    text-align: center;
}
.notice{
    background-color: rgb(248, 237, 237);
    height: 150px;
    margin:0 auto;
    max-width: 100%;
    text-align: left;
    padding:15px;
    span{
        display: inline;
        text-align: left;
        text-size-adjust: 100%;
        font-size: 17px;
        color: rgb(52, 52, 52)
    }
    h3{
        color: orangered;
        margin-top: 20px;
        font-size: 20px;
    }
}
nav{
    border-top: 1px solid orangered;
    display: flex;
    width:100%;
    .navigations{
        display: flex;
        background-color: orangered;
        padding: 1px 10px ;
        width: 85%;
        text-align: center;
        max-height: 50px;
        align-items: center; 
    }
    ul{
        display: flex;
        margin: 0 auto;
    }
    ul.primary{
        margin-left: 10px;
    }
    li{
        list-style: none;
        i{
            margin-left: 5px;
            cursor: pointer;
            color: #fff;
        }
        a{
            text-decoration: none;
            color: #fff;
            padding: 10px;
            font-size: 15px;
        }
    }
}
section.nav2{
    .navigation2{
        display: flex;
        ul.navigation-list{
            display: flex;
            position: relative;
            li{
                list-style: none;
                padding: 0 15px 0 0;
                cursor: pointer;
                font-weight: bold;
                font-size: 14px;
                &:hover{
                    color: orangered;
                    border-bottom: 3px solid orangered;
                    margin-bottom: -28px;
                    font-weight: bold;
                }
                    .drop-content1{
                        position: absolute;
                        top: 50px;
                        background-color: rgb(233, 232, 232);
                        width: 200px;
                        height: 100vh;
                        z-index: 99;
                        margin-left:  -50px;                     
                        a{
                            i{
                                margin-left: 50px;
                            }
                            display: block;
                            text-align: left;
                            padding: 20px;
                            text-decoration: none;
                            border-bottom: 1px solid rgb(36, 34, 34);
                            color: rgb(23, 22, 22);
                            &:hover{
                                color: orangered;
                            }
                        }
                    }
            }
        }
    }
}