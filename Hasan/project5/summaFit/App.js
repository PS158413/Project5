import React from "react";
import {Text, View} from "react-native";
import Navigation from "./src/screens/components/Navigation";
import { AuthProvider } from "./src/screens/context/AuthContext";
const App = () =>{
    return(
      <AuthProvider>
         <Navigation/>
     </AuthProvider>
    )
}

export default App;