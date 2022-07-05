import React, {useContext, useState, useEffect} from 'react';


import {Button, StyleSheet, Text, View, FlatList} from 'react-native';
import Spinner from 'react-native-loading-spinner-overlay';
import {AuthContext} from './context/AuthContext';

const HomeScreen = () => {
  const {userInfo, isLoading, logout} = useContext(AuthContext);


  const [data, setData] = useState([]);

    const fetchData = async () => {
        const resp = await fetch("https://nameless-stream-28529.herokuapp.com/api/prestaties");
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
            {item.prestaties}
        </Text>


    );


  return (
    <View style={styles.container}>
      {/* <Spinner visible={isLoading} /> */}
      <Text style={styles.welcome}></Text>
      <Button title="Logout" color="red" onPress={logout} />

      <Text>hier staan al uw prestaties</Text>
      {/* <FlatList style={styles.FlatList}
                    data={data}
                    renderItem={renderItem}
                    keyExtractor={(item) => item.id.toString()}
                ></FlatList> */}
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