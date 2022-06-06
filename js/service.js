let url = "http://localhost:3333";

const getHotelsData = () => {
  return fetch(`${url}` + "/hotels").then((response) => {
    return response.json();
  });
};

export default getHotelsData;
