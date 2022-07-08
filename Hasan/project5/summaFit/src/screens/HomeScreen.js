import React, { useContext, useState, useEffect } from 'react';


import { Button, StyleSheet, Text, View, FlatList } from 'react-native';
import Spinner from 'react-native-loading-spinner-overlay';
import { AuthContext } from './context/AuthContext';

const HomeScreen = () => {
  const { userInfo, isLoading, logout } = useContext(AuthContext);


  const [data, setData] = useState([]);

  const fetchData = async () => {
    const resp = await fetch("http://127.0.0.1:8000/api/performance");
    const data = await resp.json();
    console.log(data);
    setData(data);
  };

  useEffect(() => {
    fetchData();
  }, []);

  const renderItem = ({ item }) => (

    <Text
      style={styles.text}
      onPress={() => navigation.navigate("ExerciseDetails", { id: item.id })}
    >
      {item.performance}
    </Text>


  );


  return (
    <View style={styles.container}>
      {/* <Spinner visible={isLoading} /> */}
      <Text style={styles.welcome}></Text>
      <Button title="Logout" color="red" onPress={logout} />

      <Text>hier staan al uw prestaties</Text>
      <View>
        <Text>oefening: burpee</Text>
        <Text>aantal: 12</Text>
        <Text>eindtijd: 40 seconde</Text>
      </View>

      <View>
        <Text>oefening: squat</Text>
        <Text>aantal: 12</Text>
        <Text>eindtijd: 60 seconde</Text>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  welcome: {
    fontSize: 18,
    marginBottom: 8,
  },
});
// 
export default HomeScreen;