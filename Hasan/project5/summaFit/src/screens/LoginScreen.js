import React, { useContext, useState } from 'react';
import {
  Button,
  Text,
  TextInput,
  TouchableOpacity,
  View,
  SafeAreaView,
  StyleSheet,
} from 'react-native';
import Spinner from 'react-native-loading-spinner-overlay';
import { AuthContext } from './context/AuthContext';

const LoginScreen = ({ navigation }) => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const { isLoading, login } = useContext(AuthContext);



  return (
    <SafeAreaView style={styles.container}>
      {/* <Spinner visible={isLoading} /> */}
      
        <TextInput
          style={styles.input}
          value={email}
          placeholder="Enter email"
          onChangeText={text => setEmail(text)}
        />

        <TextInput
          style={styles.input}
          value={password}
          placeholder="Enter password"
          onChangeText={text => setPassword(text)}
          secureTextEntry
        />

        <TouchableOpacity
          title="Login"
          onPress={() => {
            login(email, password);
          }}
        >
          <Text style={{ fontSize: 20, textAlign: "center", }}>Login</Text>
        </TouchableOpacity>

        <View style={{ flexDirection: 'row', marginTop: 20 }}>
          <Text>Don't have an account? </Text>
          <TouchableOpacity onPress={() => navigation.navigate('Register')}>
            <Text style={styles.link}>Registreer</Text>
          </TouchableOpacity>
        </View>
    
    </SafeAreaView>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#0FEED9',
    alignItems: 'center',
    justifyContent: 'center',
  },

  input: {
    height: 40,
    margin: 12,
    fontSize: 20,
    borderBottomWidth: 1,
    padding: 10,
    width: '50%',

    textAlign: "center",
  },
  link: {
    color: 'blue',
  },
});

export default LoginScreen;