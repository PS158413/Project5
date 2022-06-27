import * as React from 'react';

import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, ImageBackground } from 'react-native';

export default function App({ route, navigation }) {
  const [data, setData] = useState();
  const { id } = route.params;

  const fetchData = async () => {
    const resp = await fetch(`https://nameless-stream-28529.herokuapp.com/api/oefenings/${id}`);
    const data = await resp.json();
    console.log(resp.title);
    setData(data);
  };

  useEffect(() => {
    fetchData();
  }, []);


  return (
    <View style={styles.container}>
      <ImageBackground source={require('../assets/bgOmschrijving.png')} resizeMode="cover" style={styles.image} >

        <Text style={styles.texttop}>Oefeningen details</Text>

        <Text style={styles.heading}> {data.oefening}</Text>
          <Text style={styles.description}>{data.bescrhijving}</Text>
          <Text style={styles.description}>{data.foto}</Text>

        <StatusBar style="auto" />
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
    height: "85%",
    fontSize: 32,
  },
});
