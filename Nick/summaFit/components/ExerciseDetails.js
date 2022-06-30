
import React, { useState, useEffect } from 'react';

import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, ImageBackground, Image } from 'react-native';
// import ImageURL from 'https://res.cloudinary.com/summa/raw/upload/v1656438728/Project5/beschrijving/${foto}'


export default function App({ route, navigation }) {
  const [data, setData] = useState();
  const { id, oefenings, beschrijving, foto } = route.params;

  const fetchData = async () => {
    const resp = await fetch(`https://project5api.herokuapp.com/api/oefenings/${id}`);
    const data = await resp.json();
    console.log(data);

    console.log(resp.title);
    setData(data);
  };

  useEffect(() => {
    fetchData();
  }, []);

const ImagesExample = () => (
  <Image source = {{uri:`https://res.cloudinary.com/summa/raw/upload/v1656438728/Project5/beschrijving/${foto}`}}
  style = {{ width: 200, height: 200 }}
  />
  
)
console.log(foto);

  return (
    <View style={styles.container}>
      <ImageBackground source={require('../assets/bgOmschrijving.png')} resizeMode="cover" style={styles.image} >

        <Text style={styles.texttop}>Oefeningen details</Text>

        <View style={styles.details}>
          <Text style={styles.description}>id: {id}</Text>
          <Text style={styles.description}>Oefening: {oefenings}</Text>
          {/* <Text style={styles.description} source = {{uri:`https://res.cloudinary.com/summa/raw/upload/v1656438728/Project5/beschrijving/${beschrijving}`}}> {}</Text> */}
 
          <Image style={{backgroundColor: 'red',  width: 380, height:300 }} source = {{uri:`https://res.cloudinary.com/summa/image/upload/v1656438446/Project5/fotos/${foto}`}}/>
        
        </View>
        <StatusBar style="auto"/>
      </ImageBackground>

    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'center',
    textAlignVertical: 'top',
    paddingTop: 0,
    paddingBottom: 0
  },

  image: {
    width: "100%",
    height: "100%",
    alignItems: "center",
    justifyContent: "center",
  },
  texttop: {
    height: "20%",

    fontSize: 32,
  },
  description: {
    fontSize: 30,
    fontWeight: '300', // Light
  },

  details: {
    height: "80%",
  },
});
