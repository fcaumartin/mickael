import { StatusBar } from 'expo-status-bar';
import { useEffect, useState } from 'react';
import { StyleSheet, Text, View } from 'react-native';

export default function Categories() {

  const [Categories, setCategories] = useState([]);

  useEffect(()=>{
    fetch("https://127.0.0.1:8000/api/clients",{
      headers: {
        Accept: "application/json"
      }
    })
    .then( res => res.json())
    .then( (data) => {
      console.log(data)
      setCategories(data);
    }) 
  },[])
  return (
    <View style={styles.container}>
      <Text>Open up App.js to start working on your app!</Text>
      {
        Categories.map((cat, i) => (
          <Text key={i}>
            {cat.nom}
          </Text>
        ))
      }
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
